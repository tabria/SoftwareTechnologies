import java.util.Scanner;

public class URLParser {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String info = scanner.nextLine();

        int indexProtocol = info.indexOf("://");
        String protocol ="";
        if (indexProtocol != -1){
            protocol = info.substring(0,indexProtocol);
            info = info.substring(indexProtocol+3);
        }

        int indexSlash = info.indexOf("/");

        String server = "";
        String resource = "";
        if (indexSlash == -1){
            server = info;
        } else {
            server = info.substring(0, indexSlash);
            resource = info.substring(indexSlash+1);
        }

        System.out.println(String.format("[protocol] = \"%s\"", protocol));
        System.out.println(String.format("[server] = \"%s\"", server));
        System.out.println(String.format("[resource] = \"%s\"", resource));
    }
}
