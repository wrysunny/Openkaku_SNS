#by:iceCliffs Apache License 2.0
import requests as req
import re
while True:
    avnumber = input("av:")
    if avnumber == int:
        print("OK")
    else:
        urlapi = "https://api.bilibili.com/x/v1/dm/list.so?oid="+avnumber
        res = req.get(urlapi)
        res.encoding = "utf-8"
        xmlString = res.text
        danmukus = re.findall("<d.*?>(.*?)</d>",xmlString)
        for i in danmukus:
            print(i)
