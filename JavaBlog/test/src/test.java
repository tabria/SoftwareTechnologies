import java.util.ArrayList;
import java.util.Scanner;
import java.util.stream.*;
import java.util.regex.Pattern;
import java.util.regex.Matcher;


public class test {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String text = scanner.nextLine();

        Pattern pattern = Pattern.compile(String.format("<upcase>.+?<\\/upcase>"));

        Matcher matcher = pattern.matcher(text);

        int arrsize = 0;
        while(matcher.find()){arrsize++;};

        matcher = pattern.matcher(text);

        String[] textArr = new String[arrsize];
        int counter = 0;
        while(matcher.find()) {
            textArr[counter] = matcher.group(0);
            counter++;
        }

        String[] tempArr = new String[textArr.length];

        for (int j = 0; j < tempArr.length ; j++) {

            tempArr[j] = textArr[j];
        }

        for (int i = 0; i < textArr.length; i++) {

            textArr[i] = textArr[i].replaceFirst("<upcase>", "");
            textArr[i] = textArr[i].replaceFirst("</upcase>", "");
            textArr[i]  = textArr[i].toUpperCase();
            text = text.replaceFirst(tempArr[i], textArr[i]);

        }
        System.out.println(text);
    }
}