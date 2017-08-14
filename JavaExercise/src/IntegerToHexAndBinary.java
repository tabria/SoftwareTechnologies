import java.util.Scanner;

public class IntegerToHexAndBinary {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int value = Integer.parseInt(scanner.nextLine());

        String resultHex = Integer.toHexString(value).toUpperCase();
        String resultBinary = Integer.toBinaryString(value);

        System.out.println(resultHex);
        System.out.println(resultBinary);

    }
}
