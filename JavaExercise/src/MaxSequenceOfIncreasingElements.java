import java.util.Arrays;
import java.util.Scanner;

public class MaxSequenceOfIncreasingElements {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int[] arr = Arrays.stream(scanner.nextLine().split(" "))
                    .mapToInt(Integer::parseInt)
                    .toArray();

        int bestStart = 0;
        int bestEnd = 0;
        int bestLen = 1;

        int start = 0;
        int end = 0;
        int len = 1;
        for (int i = 1; i <arr.length ; i++) {
            if (arr[i-1] < arr[i]){
                len++;
                end = i;
            } else {
                start = i;
                end = i;
                len = 1;
            }

            if (len > bestLen){
                bestStart = start;
                bestEnd = end;
                bestLen = len;
            }
        }

        for(int i=bestStart; i<=bestEnd; i++){
            System.out.print(arr[i] + " ");
        }

    }

}
