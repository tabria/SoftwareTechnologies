import java.util.Scanner;

public class Variables {

    public static void main(String[] args) {


        Scanner scanner = new Scanner(System.in);
        String inputStr = scanner.nextLine();
        int result = Integer.parseInt(inputStr, 16);
        System.out.println(result);

    }

}
