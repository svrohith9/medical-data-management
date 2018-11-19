# simple_blockchian_implementaion
1. <name>+<Aadhaar>+<email>+<mobile>+<PIN> at sign-up is base_64 encoded and stored in db.
2. base_64 hash is appended with $i (initial $i=0) as a string and SHA256 hash is generated and stored as
   transcation along with data and timestamp.
3. for printing verfication of the hash is done using the same logic that is used to append until the last valid hash is found.
