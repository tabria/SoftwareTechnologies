import java.util.Arrays;
import java.util.Scanner;

public class SymmetricNumbers {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        String[] strArr = new String[1];
        strArr[0] = scanner.nextLine();

        StringBuilder sb = new StringBuilder();

        int number = Integer.parseInt(strArr[0]);
        for(int i=1; i<=number; i++){
            if (isSymmetric(i)){
                sb.append(i);
                sb.append(" ");

            }
        }
        System.out.println(sb);
    }

    private static boolean isSymmetric(int i) {
        String num = Integer.toString(i);
        for(int k=0; k<num.length(); k++){
            char a = num.charAt(k);
            char b=num.charAt(num.length()-1-k);
            if(num.charAt(k) != num.charAt((num.length()-1-k))){
                return false;
            }
        }
        return true;
    }

}
