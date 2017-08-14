import java.util.Random;
import java.util.Scanner;

public class AdvertisementMessage {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int messageCount = Integer.parseInt(scanner.nextLine());
        Random rand = new Random();

        PrintMessage(messageCount, rand);

    }

    private static void PrintMessage(int messageCount, Random rand) {

        for(int i=0; i<messageCount; i++){

            System.out.println(ComposeMessage(rand));
        }

    }

    private static String ComposeMessage(Random rand) {

        String[] phrases = new String[] { "Excellent product.", "Such a great product.", "I always use that product.", "Best product of its category.", "Exceptional product.", "I can’t live without this product." };
        String[] events = new String[] { "Now I feel good.", "I have succeeded with this product.", "Makes miracles. I am happy of the results!", "I cannot believe but now I feel awesome.", "Try it yourself, I am very satisfied.", "I feel great!" };
        String[] authors = new String[] { "Diana", "Petya", "Stella", "Elena", "Katya", "Iva", "Annie", "Eva" };
        String[] cities = new String[] { "Burgas", "Sofia", "Plovdiv", "Varna", "Ruse" };

        String phrase = phrases[rand.nextInt(phrases.length - 1)];
        String feel = events[rand.nextInt(events.length - 1)];
        String author = authors[rand.nextInt(authors.length - 1)];
        String city = cities[rand.nextInt(cities.length - 1)];

        return phrase + " " + feel + " " + " " + author + " - " + city;
    }


}
