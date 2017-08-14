import java.util.Arrays;
import java.util.Scanner;

public class CEnsorEmail {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String email = scanner.nextLine();
        String text = scanner.nextLine();

        String[] mail = email.split("@");
        int userLen = mail[0].length();
        char[] chars = new char[userLen];
        Arrays.fill(chars, '*');
        String hiddenUser = new String(chars) + "@" + mail[1];

        String result = text.replaceAll(email, hiddenUser);
        System.out.println(result);

    }

}
