
import java.util.Arrays;
import java.util.Scanner;

public class CompareCharArrays {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        String[] arr1 = scanner.nextLine().split(" ");
        String[] arr2 = scanner.nextLine().split(" ");

        int smallerArr = arr1.length < arr2.length ? arr1.length : arr2.length;

        for(int i=0; i<smallerArr; i++){
            if(arr1[0].compareTo(arr2[0]) < 0){
                PrintArray(arr1);
                PrintArray(arr2);
                return;
            } else if (arr1[0].compareTo(arr2[0]) > 0) {
                PrintArray(arr2);
                PrintArray(arr1);
                return;
            }
        }

        if (arr1.length>arr2.length){
            PrintArray(arr2);
            PrintArray(arr1);
        } else {
            PrintArray(arr1);
            PrintArray(arr2);
        }
    }

    public static void PrintArray(String[] arr){
        System.out.println(String.join("",arr));
    }

}
