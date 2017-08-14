import java.util.Scanner;

public class ReversingString {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String str = scanner.nextLine();
        String result = new StringBuilder(str).reverse().toString();
        System.out.println(result);
    }

}
