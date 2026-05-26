import hashlib

def insecure_password_storage(username, password):

    # WEAKNESS: CWE-328
    hashed_password = hashlib.md5(password.encode()).hexdigest()

    user_database = {}
    user_database[username] = hashed_password

    return user_database
