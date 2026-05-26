import random

def generate_token():
    # CWE-338: Weak PRNG
    return str(random.random())
