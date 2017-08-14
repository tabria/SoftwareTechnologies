import java.util.Arrays;
import java.util.Scanner;

public class MaxSequenceOfEqualElements {

    public static void main(String[] args) {


        Scanner scanner = new Scanner(System.in);

        int[] arr = Arrays.stream(scanner.nextLine().split(" "))
                        .mapToInt(Integer::parseInt).toArray();

        int bestStart =0;
        int bestLen=1;

        int start = arr[0];
        int len = 1;
        for(int i=1; i<arr.length; i++){
            int currentToken = arr[i];
            if (currentToken == start){
                len++;
            } else {
                start = arr[i];
                len = 1;
            }

            if (len > bestLen){
                bestStart = start;
                bestLen = len;
            }
        }

        for(int i=1; i<=bestLen; i++){
            System.out.print(bestStart + " ");
        }
        System.out.println();
    }

}
