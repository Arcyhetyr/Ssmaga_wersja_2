const viewer = new PDFViewer(); //
viewer.load('book.pdf'); 
document.querySelector('#book-viewer').appendChild(viewer.viewer);