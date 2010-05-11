
/*
	Never want to write an actual full email in HTML or it'll get spammed. Use javascript to construct it piece by piece.
	
	prefix should be the part before the @ sign (all email addresses constructed using this function will have rdcc dot org as the suffix)
	linkText is an optional argument, it'll be whatever is actually shown on the page
*/
function safeEmail(prefix, linkText) {
	
	// put all the pieces of the email address together.  the email variable now contains a full email address invisible to robots
	var email = [prefix, "@", "r", "d", "c", "c", ".", "o", "r", "g"].join('');
	
	// construct a MAILTO link for the given email address.  If provided, show linkText.  If not, just show the email address.
	return ['<a href="MAILTO:', email, '">', linkText || email, '</a>'].join('');
}
