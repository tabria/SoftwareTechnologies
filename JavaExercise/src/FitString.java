import java.util.Scanner;

public class FitString {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String str = scanner.nextLine();
        int strLen = str.length();
        if (strLen < 20) {
            StringBuilder sb = new StringBuilder();
            sb.append(str);
            for(int i=1; i<=20 -strLen; i++){
                sb.append("*");
            }
            str = sb.toString();
        }
        else if(strLen>20){
            str = str.substring(0, 20);

        }

        System.out.println(str);
    }

}
