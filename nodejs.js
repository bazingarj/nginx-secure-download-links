var crypto = require("crypto");

function generateSecurePathHash(expires, url, client_ip, secret) {
    if (!expires || !url || !client_ip || !secret) {
        return undefined;
    }
    
    var input = expires + url + client_ip + " " + secret;
    var binaryHash = crypto.createHash("md5").update(input).digest();
    var base64Value = new Buffer(binaryHash).toString('base64');
    return base64Value.replace(/=/g, '').replace(/+/g, '-').replace(///g, '_');
}
