import com.sun.org.apache.xpath.internal.SourceTree;

import java.util.Scanner;

public class SumNIntegers {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        int cycles = Integer.parseInt(scanner.nextLine());

        int sum =0;
        while(cycles>0){

            int currentNumber = Integer.parseInt(scanner.nextLine());
            sum +=currentNumber;
            cycles--;

        }
        System.out.println(sum);

    }
}
