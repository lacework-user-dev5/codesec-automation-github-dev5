import java.security.MessageDigest;

public class WeakHash {
    public static void main(String[] args) throws Exception {
        String password = "password";
        MessageDigest md5 = MessageDigest.getInstance("MD5");
        byte[] hash = md5.digest(password.getBytes());
        StringBuilder hexString = new StringBuilder();
        for (byte b : hash) {
            hexString.append(String.format("%02x", b));
        }
        System.out.println("MD5 string:" + hexString.toString());
    }
}
