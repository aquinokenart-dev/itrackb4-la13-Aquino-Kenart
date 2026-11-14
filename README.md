Lab # 13

J1
Your HomeController is not a resource controller. Name two things an index() on a resource controller does that yours does not have to.
-A resource controller has other methods like create(), store(), show(), edit(), update(), and destroy(). My HomeController only uses index() to display the homepage, so it does not need those methods.

J2
Your pagination links lost the search term until you added one method. Say what those links contained before, and what the controller therefore received.
-Before adding withQueryString(), the pagination links only contained the page number. The controller did not receive the previous search and filter values when I clicked the next page.

J3
A misspelled sort value does not break your page. Explain why that is worse than an error, and what your allowed list does about it.
-It is worse because the page still loads but the movies may not be sorted correctly without showing an error. The allowed list checks the sort value and changes invalid values to the default column, which is title.
