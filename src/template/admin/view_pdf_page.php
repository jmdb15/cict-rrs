<style>
  .watermark {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: rgba(255, 0, 0, 0.5); /* Adjust watermark color and opacity */
    font-size: 24px; /* Adjust watermark font size */
    z-index: 123;
  }
  .watermark::after {
    /* content: url('../../srcimg/images.jpeg'); Replace 'watermark.png' with your image path */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0.5; /* Adjust watermark opacity as needed */
    pointer-events: none; /* Disable pointer events */
    z-index: 99999999; /* Ensure watermark is on top */
  }
</style>

<div class="w-full h-fit md:h-[calc(100vh-80px)] m-0 p-0 overflow-x-hidden bg-gray-200">

    <div id="pdf-container" class="container mt-[80px] mx-auto flex flex-col items-center border rounded z-10 ">
      <div class="watermark border"></div>
    </div>
    
    
    <div class="absolute left-0 top-[80px] md:top-[80px] w-[30%] h-full md:h-[calc(100vh-80px)] bg-orange-400 z-[1]"></div>
</div>

<?='<script>const pdfUrl = "../../public/pdfs/'.$file.'";</script>'?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
<script>
  // PDF.js configuration
  pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.worker.min.js';

  const pdfContainer = document.getElementById('pdf-container');

  // Render PDF
  pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
    for (let i = 1; i <= pdf.numPages; i++) {
      pdf.getPage(i).then(page => {
        const scale = 1.5; // Adjust the scale as needed
        const viewport = page.getViewport({ scale: scale });

        const parent = document.createElement('div');
        parent.classList = 'relative border-4 my-3 border-gray-500 z-10 ';
        parent.height = viewport.height;
        parent.width = viewport.width;

        const watermark = document.createElement('div');
        watermark.classList = "absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-1/2 h-1/2 opacity-30";
        watermark.style.backgroundImage = "url('../../src/img/images.jpeg')";
        watermark.style.backgroundSize = "contain";
        watermark.style.backgroundRepeat = "no-repeat";
        // watermark.width = viewport.width;

        const canvas = document.createElement('canvas');
        // canvas.classList = 'border-4 my-3 border-gray-500 w-3/4 z-10 bg-transparent bg-blend-lighten';
        canvas.style.backgroundImage = "url('../../src/img/images.jpeg')";
        // canvas.classList = 'w-3/4';
        const context = canvas.getContext('2d');
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        console.log(canvas.height);

        const renderContext = {
          canvasContext: context,
          viewport: viewport
        };

        page.render(renderContext).promise.then(() => {
          parent.appendChild(watermark);
          parent.appendChild(canvas);
          pdfContainer.appendChild(parent);
        });
      });
    }
  });
</script>