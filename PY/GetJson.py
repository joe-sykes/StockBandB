import requests
url = ("https://newsapi.org/v2/everything?q=bitcoin&sources=financial-times&apiKey=369007ede060453480fb55b8a7b1890f")
response = requests.get(url)
print response.json()