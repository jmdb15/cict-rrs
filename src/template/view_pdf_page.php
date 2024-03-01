<div id="pdf-container" class="container w-screen flex flex-col items-center border rounded shadow-xl">
  <div class="watermark border">
    <!-- <img src="pana.png" class="z-[1234567890] opacity-40" alt=""> -->
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
<script>
  // PDF.js configuration
  pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.worker.min.js';

  const pdfUrl = '../public/pdfs/<?=$row['file']?>'; // Replace with the path to your PDF
  const pdfContainer = document.getElementById('pdf-container');

  // Render PDF
  pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
    for (let i = 1; i <= pdf.numPages; i++) {
      pdf.getPage(i).then(page => {
        const scale = 1.5; // Adjust the scale as needed
        const viewport = page.getViewport({ scale: scale });

        const canvas = document.createElement('canvas');
        canvas.classList = 'shadow-lg border-4 border-gray-500 w-full';
        const context = canvas.getContext('2d');
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        const renderContext = {
          canvasContext: context,
          viewport: viewport
        };

        page.render(renderContext).promise.then(() => {
          pdfContainer.appendChild(canvas);
        });
      });
    }
  });
</script>