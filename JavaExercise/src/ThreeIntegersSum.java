import com.sun.org.apache.xpath.internal.SourceTree;

import java.util.Arrays;
import java.util.Scanner;

public class ThreeIntegersSum {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int numberOne = scanner.nextInt();
        int numberTwo = scanner.nextInt();
        int numberThree = scanner.nextInt();

        if (!IsNumberSumOfTwo(numberOne, numberTwo, numberThree) &&
                !IsNumberSumOfTwo(numberOne, numberThree, numberTwo) &&
                !IsNumberSumOfTwo(numberTwo, numberThree, numberOne)) {
            System.out.println("No");
        }

    }

    public static boolean IsNumberSumOfTwo(int num1, int num2, int sum){
        if (num1+num2 != sum){
            return false;
        }
        if (num1>num2){
            int temp = num1;
            num1 = num2;
            num2 = temp;
        }
        System.out.printf("%d + %d = %d%n", num1, num2, sum);
        return true;
    }
}
