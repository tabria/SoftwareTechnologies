import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Scanner;
import java.util.stream.Collectors;

public class BookLibraryModification {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        DateTimeFormatter df = DateTimeFormatter.ofPattern("dd.MM.yyyy");

        Library lib = new Library();
        lib.Name = "Lib";
        lib.Books = FillBooks(scanner, df);

        LocalDate releaseDate = LocalDate.parse(scanner.nextLine(), df);

        Book[] sortedBooks = lib.getBooks().stream()
                    .filter(a->a.getDate().isAfter(releaseDate))
                    .sorted((a, b) -> {
                        int compareResult = a.getDate().compareTo(b.getDate());
                        if (compareResult == 0){
                            compareResult = a.getTitle().compareTo(b.getTitle());
                        }
                        return compareResult;
                    })
                    .toArray(Book[]::new);

        for(Book book: sortedBooks) {
            System.out.printf("%s -> %s%n", book.getTitle(), df.format(book.getDate()));
        }

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
