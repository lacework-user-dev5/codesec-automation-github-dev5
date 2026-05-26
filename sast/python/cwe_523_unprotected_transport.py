import requests

def send_credentials():
    # CWE-523: Unprotected Transport of Credentials (HTTP)
    return requests.post("http://example.com/login", data={"user": "admin", "pass": "secret"})
