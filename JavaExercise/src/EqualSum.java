import java.util.Arrays;
import java.util.Scanner;

public class EqualSum {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        long[] arr = Arrays.stream(scanner.nextLine().split(" "))
                    .mapToLong(Long::parseLong)
                    .toArray();

        String output = "no";
        long leftSum =0;
        long rightSum= GetRightSum(arr);

        for(int j=0; j<arr.length; j++){
            if (leftSum == rightSum){
                output = Integer.toString(j);
                break;
            }
            rightSum = rightSum == 0 ? 0 : rightSum - arr[j+1];
            leftSum += arr[j];
        }

        System.out.println(output);

    }

    private static long GetRightSum(long[] arr) {

        long sum =0;
        for(int i=arr.length-1; i>0; i--){

            sum += arr[i];

        }
        return sum;
    }
}
