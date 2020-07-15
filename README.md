# nginx-secure-download-links
Create secure and random download links for each download. This is fairly easy.


1. Copy the nginx directive from nginx.conf file  and change secure_text - enigma to your custom 

2. Use md5 hash function from function.php or nodejs.js file to create your secure url in the code and start serving it to user

3. Reload or Restart nginx server to make secure links effective

```Note: In ubuntu you may have to run " sudo apt-get install nginx-extras " to enable secure links```


Current Url: https://example.com/files/video/data.mp4

FINAL URL:  https://example.com/files/video/data.mp4?md5=HASH_HERE&expiry=UNIX_TIMESTAMP

Medium Blog: https://medium.com/@rahul.juneja3/how-to-create-secure-download-link-urls-via-nginx-5578a0db5913
