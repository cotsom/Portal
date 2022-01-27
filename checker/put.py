#!/usr/bin/python3


import requests
import sys

def cmd_args(func):
    def wrapper():
        return func(sys.argv[1], sys.argv[2])

    return wrapper

@cmd_args
def run(ip=None, flag=None):
	login = "flag"
	passwd = flag
	response = requests.post(f"http://{ip}/IDOR/auth.php", data={"action": 'signup', "login": login, "passwd": passwd})

	return login+":"+passwd

print(run())