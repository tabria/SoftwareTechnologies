using BookLibrary.Models;
using System.Linq;
using System.Data.Entity;
using System.Web.Mvc;
using Microsoft.AspNet.Identity;

namespace BookLibrary.Controllers
{
    public class BooksController : Controller
    {
        // GET: Book
        public ActionResult Index()
        {
            using (var db = new ApplicationDbContext())
            {
                var books = db.Books.Include(b=>b.Author).ToList();

                return View(books);
            }
        }

        // GET: Book/Details/5
        public ActionResult Details(int id)
        {
            using (var db = new ApplicationDbContext())
            {
                var book = db.Books.Include(b=>b.Author).SingleOrDefault(b=>b.Id == id);

                if (book == null)
                {
                    return new HttpNotFoundResult($"Cannot find book with id {id}");
                }

                return View(book);
            }
        }

        // GET: Book/Create
        [Authorize]
        public ActionResult Create()
        {
            return View();
        }

        // POST: Book/Create
        [HttpPost]
        [Authorize]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Book book)
        {
            if (book.Title == null || book.Description == null)
            {
                return RedirectToAction("Index");
            }

            using (var db = new ApplicationDbContext())
            {
                var userId = User.Identity.GetUserId();
                book.AuthorId = userId;
                db.Books.Add(book);
                db.SaveChanges();

                return RedirectToAction("Index");
            }
        }

        // GET: Book/Edit/5
        [Authorize]
        public ActionResult Edit(int id)
        {
           using (var db = new ApplicationDbContext())
            {
                var book = db.Books.SingleOrDefault(b => b.Id == id);

                if (book == null)
                {
                    return RedirectToAction("Index");
                }

                var userId = User.Identity.GetUserId();
                if (book.AuthorId != userId)
                {
                    return new HttpNotFoundResult("Cannot delete this item!");
                }

                return View(book);
            }
        }

        // POST: Book/Edit/5
        [HttpPost]
        [Authorize]
        [ValidateAntiForgeryToken]
        public ActionResult Edit(int id, Book book)
        {
            if (book.Title== null || book.Description == null)
            {
                return View(book);
            }


          using (var db = new ApplicationDbContext())
            {
                var editBook = db.Books.Include(b=>b.Author).SingleOrDefault(b=>b.Id == id);

                if (book == null)
                {
                    return new HttpNotFoundResult($"Cannot find book with id {id}");
                }

                var userId = User.Identity.GetUserId();
                if (editBook.AuthorId != userId)
                {
                    return new HttpNotFoundResult("Cannot delete this item!");
                }

                editBook.Title = book.Title;
                editBook.Description = book.Description;

                db.SaveChanges();

                return RedirectToAction("Details", new { id = id });
            }
        }

        // GET: Book/Delete/5
        [Authorize]
        public ActionResult Delete(int id)
        {
            using (var db = new ApplicationDbContext())
            {
                var book = db.Books.SingleOrDefault(b => b.Id == id);

                if (book == null)
                {
                    return new HttpNotFoundResult($"Cannot find book with id {id}");
                }

                var userId = User.Identity.GetUserId();
                if (book.AuthorId != userId)
                {
                    return new HttpNotFoundResult("Cannot delete this item!");
                }

                return View(book);
            }
        }

        // POST: Book/Delete/5
        [HttpPost]
        [Authorize]
        [ValidateAntiForgeryToken]
        public ActionResult Delete(int id, Book book)
        {
            
            using (var db = new ApplicationDbContext())
            {
                var deleteBook = db.Books.SingleOrDefault(b => b.Id == id);

                if (deleteBook == null)
                {
                    return new HttpNotFoundResult($"Cannot find book with id {id}");
                }

                var userId = User.Identity.GetUserId();
                if (deleteBook.AuthorId != userId)
                {
                    return new HttpNotFoundResult("Cannot delete this item!");
                }

                db.Books.Remove(deleteBook);
                db.SaveChanges();

                return RedirectToAction("Index", "Home");

            }

        }
    }
}
