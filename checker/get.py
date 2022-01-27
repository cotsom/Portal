#!/usr/bin/python3
import sys
import requests
from bs4 import BeautifulSoup

def cmd_args(func):
    def wrapper():
        return func(sys.argv[1], sys.argv[2])

    return wrapper

@cmd_args
def run(ip=None, _id=None):
    login, passwd = _id.split(':')

    response = requests.post(f"http://{ip}/IDOR/auth.php", data={"action": 'signin', "login": login, 'passwd': passwd})
    soup = BeautifulSoup(response.text, "html.parser")
    #req = soup.find("h2", class_="username")
    return response.text


print(run())
