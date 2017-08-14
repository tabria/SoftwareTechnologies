import java.util.Arrays;
import java.util.Scanner;

public class Largest3Numbers {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        int[] numbers = Arrays.stream(scanner.nextLine().split(" "))
                            .mapToInt(Integer::parseInt)
                            .toArray();

        Arrays.sort(numbers);
        int endCycles = numbers.length < 3 ? -1 : numbers.length - 1 -3;
        for(int i=numbers.length-1; i>endCycles; i--){
            System.out.println(numbers[i]);
        }

    }
}
