'Play with text' is a web application which allows users to perform the following operations on text-

a. Data Encryption and Decryption

Encryption is the process of translating plain text data (plaintext) into something that appears to be random and meaningless (ciphertext). Decryption is the process of converting ciphertext back to plaintext. 

    Clicking on the encrypt button encrypts the input plain text and sends the cipher text to the user's email
    Clicking on the decrypt button deccrypts the input cipher text which was previously sent to the mail and 
    sends the decrypted text to the user's email.

b. Palindrome

A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward.
Allowances may be made for adjustments to capital letters, punctuation, and word dividers.

    Clicking on pallindrome button will check whether the input string is a pallindrome or not.

c. Text Statistics

    Clicking this button will display certain interesting statistics of the input text such as-

    1. Number of words in the text
    2. NUmber of characters in the text
    3. Number of upper-case characters in text
    4. Number of lower-case characters in text
    5. Number of special characters 

d. Check occurences

     Clicking on this button shows the number of occurences of a particular word. A minimum of 1 and a maximum of
     3 words can be checked at a time.

e.Hashing

A cryptographic hash function is a hash function which is considered practically impossible to invert, that is, to recreate the input data from its hash value alone.

    Clicking this button generates the hash code of input text.
    
How to work with the application?

-> Enter text in the text area and then click on the button corresponding to the function to be performed. 'view help page' can be clicked to learn more about the application. Buttons wont respond until text is entered in text area.
    
SERVICES USED-

1. Google User Management- We have used google user management service which requires every user to login using their gmail account. 

2. URL Fetch- We have used URL Fetch to access the help page of our application. A separate web service with site address 'http://linen-mason-125117.appspot.com' was created. This web page is fetched into our peoject using URL Fetch and can be accessed by cicking 'View Help Page'

3. Mail- We have used this service to increase security in our application. Our application allows users to encrypt and decrypt text. The resulting encrypted or decrypted text is directly sent to the user's mail i.e the mail with which he is logged in.

4. Memcache- This service is used for speeding up the pallindrome check on words. A text once checked for pallindrome is cached in memory and is directly accessed from cache memory, the next time it is checked.
 
