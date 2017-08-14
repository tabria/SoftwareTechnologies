import java.util.Scanner;

public class ChangeToUppercase {


    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);


        String text = scanner.nextLine();

        while(true){
            int upCaseStart = text.indexOf("<upcase>");
            if (upCaseStart == -1){
                break;
            }
            int upCaseEnd = text.indexOf("</upcase>");

            String strToUpp = text.substring(upCaseStart+8, upCaseEnd);
            text = text.replaceFirst(strToUpp, strToUpp.toUpperCase());
            text = text.replaceFirst("<upcase>", "");
            text = text.replaceFirst("</upcase>", "");
        }

        System.out.println(text);
    }
}
