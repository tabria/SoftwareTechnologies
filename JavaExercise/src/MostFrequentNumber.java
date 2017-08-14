import java.util.Arrays;
import java.util.Scanner;

public class MostFrequentNumber {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] arr1 = scanner.nextLine().split(" ");

        String numbers[]= new String[arr1.length];
        int occurance[]= new int[arr1.length];

        for(int j=0; j<arr1.length; j++){
            String startElement = arr1[j];
            for(int i=0; i<numbers.length; i++){
                int currentOccurance = occurance[i];
                if (currentOccurance == 0){
                    occurance[i] +=1;
                    numbers[i] = startElement;
                    break;
                }
                String currentElement = numbers[i];
                if (currentElement.equals(startElement)) {
                    occurance[i] +=1;
                    break;
                }

            }
        }

        String mostFreqNumber = "";
        int currentOccurance = 0;
        for (int i=0; i<occurance.length; i++){
            if (occurance[i] == 0){
                break;
            }
            if (currentOccurance < occurance[i]){
                currentOccurance = occurance[i];
                mostFreqNumber = numbers[i];
            }
        }

        System.out.println(mostFreqNumber);

    }
}
