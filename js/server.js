const koa=require("koa")
const fs = require("fs")
const fetch = require("node-fetch")
const childProcess = require("child_process")
const app=new koa()
app.use(require('koa-static')(".", {}));
app.use(async ctx => {
    if (ctx.path === "/feed") {
        ctx.type = "html"
        const response = await fetch("https://spreadsheets.google.com/feeds/list/0AhySzEddwIC1dEtpWF9hQUhCWURZNEViUmpUeVgwdGc/1/public/basic?alt=json")
        const json = await response.json()
        const feedData = json.feed.entry.map(entry => {
          const [name, price, pointChange] = entry.content['$t'].split(',').map(field => {
            return field.replace(/^\s*\w+:\s*/, '')
          })
          return { title: entry.title['$t'], name, price, pointChange  }
        })
        ctx.body = fs.readFileSync("index.php", "utf-8").replace("<!--FEEDDATA-->", feedData.map(stock => {

            return `<h1>${stock.title}</h1><h2>${stock.price}</h2><h3>${stock.pointChange}</h3>`

        }))

        
    } else {
        ctx.type = "html"
        ctx.body = fs.readFileSync("index.php")
    }
})



app.listen(8080)
