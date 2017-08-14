import java.util.Scanner;

public class IndexOfLetters {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] strArr = scanner.nextLine().split("");

        for(int i=0; i<strArr.length; i++){
            int valueChar = strArr[i].charAt(0) - 97;
            System.out.println(strArr[i] + " -> " + valueChar);
        }

    }

}
