import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class BookLibrary {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        DateTimeFormatter df = DateTimeFormatter.ofPattern("dd.MM.yyyy");

        Library lib = new Library();
        lib.Name = "Lib";
        lib.Books = FillBooks(scanner, df);

        lib.getBooks().stream()
                .collect(Collectors.groupingBy(Book::getAuthor, Collectors.summingDouble(Book::getPrice)))
                .entrySet()
                .stream()
                .sorted((a, b) -> {
                    int comparissonResult = Double.compare(b.getValue(), a.getValue());

                    if(comparissonResult == 0){
                        comparissonResult = a.getKey().compareTo(b.getKey());
                    }

                    return comparissonResult;
                })
                .forEach((kvp)-> {
                    String author = kvp.getKey();
                    double price = kvp.getValue();
                    System.out.printf("%s -> %.2f%n", author, price);
                });

    }

    private static ArrayList<Book> FillBooks(Scanner scanner, DateTimeFormatter df) {

        int cycles = Integer.parseInt(scanner.nextLine());

        ArrayList<Book> allBooks = new ArrayList<Book>();

        for(int i=0; i<cycles; i++) {
            String[] currentBook = scanner.nextLine().split(" ");
            Book books = new Book();
            books.Title = currentBook[0];
            books.Author = currentBook[1];
            books.Publisher = currentBook[2];
            books.Date = LocalDate.parse(currentBook[3], df);
            books.IsbnNumber = currentBook[4];
            books.Price = Double.parseDouble(currentBook[5]);

            allBooks.add(books);
        }
        return allBooks;

    }


    static class Library {

        public String Name;
        public ArrayList<Book> Books;

        public String getName() {
            return Name;
        }

        public void setName(String name) {
            Name = name;
        }

        public ArrayList<Book> getBooks() {
            return Books;
        }

        public void setBooks(ArrayList<Book> books) {
            Books = books;
        }
    }

    static class Book {

        public String Title;
        public String Author;
        public String Publisher;
        public LocalDate Date;
        public String IsbnNumber;
        public double Price;

        public String getTitle() {
            return Title;
        }

        public void setTitle(String title) {
            Title = title;
        }

        public String getAuthor() {
            return Author;
        }

        public void setAuthor(String author) {
            Author = author;
        }

        public String getPublisher() {
            return Publisher;
        }

        public void setPublisher(String publisher) {
            Publisher = publisher;
        }

        public LocalDate getDate() {
            return Date;
        }

        public void setDate(LocalDate date) {
            Date = date;
        }

        public String getIsbnNumber() {
            return IsbnNumber;
        }

        public void setIsbnNumber(String isbnNumber) {
            IsbnNumber = isbnNumber;
        }

        public double getPrice() {
            return Price;
        }

        public void setPrice(double price) {
            Price = price;
        }
    }
}
