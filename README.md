# Simple Blockchain Implementaion with Medical Data
1. "name"+"Aadhaar"+"email"+"mobile"+"PIN" at sign-up is base_64 encoded and stored in db.
2. base_64 hash is appended with $i (initial $i=0) as a string and SHA256 hash is generated and stored as
   transcation along with data and timestamp.
3. for printing verfication of the hash is done using the same logic that is used to append until the last valid hash is found.


# instructions
1. create a db named <b> test1 </b> and import sql file into InnoDB.
2. Initiate phpmyadmin
3. proceed with signup
4. login with the credentails
5. input the patient data
6. All the data pertaining to individual patient will be maintained in db in encrypted format.
7. every next record will have the connection with the most recent existing record of that particular login user.
