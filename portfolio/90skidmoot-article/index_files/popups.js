function googleMaps(location) {
  var url = 'http://maps.google.com.au/maps?f=q&source=s_q&hl=en&geocode=&output=embed&q='+location;
  newwindow=window.open(url,'googleMaps','status=0,toolbar=0,location=1,menubar=0,directories=0,resizable=1,scrollbars=1,height=500,width=700');
  newwindow.focus();
}
function buyTickets(event) {
  var url = 'http://ticketing.vicrovers.com/'+event+'/OrderTickets.aspx';
  ticketwindow=window.open(url,'buyTickets','status=0,toolbar=0,location=1,menubar=0,directories=0,resizable=1,scrollbars=1,height=500,width=700');
  ticketwindow.focus();
}