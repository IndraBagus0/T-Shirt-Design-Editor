import React, { useRef, useState, useEffect } from 'react';
import * as fabric from 'fabric';
import frontImage from '../assets/img/crew_front.png';
import backImage from '../assets/img/crew_back.png';

const TShirtEditor = ({ color }) => {
  const canvasRef = useRef(null);
  const [view, setView] = useState('front');
  const [canvas, setCanvas] = useState(null);

  useEffect(() => {
    const canvasInstance = new fabric.Canvas(canvasRef.current, {
      hoverCursor: 'pointer',
      selection: true,
      selectionBorderColor: 'blue',
    });

    setCanvas(canvasInstance);

    return () => canvasInstance.dispose();
  }, []);

  useEffect(() => {
    if (canvas) {
      const shirtImg = view === 'front' ? frontImage : backImage;

      fabric.Image.fromURL(shirtImg, (img) => {
        img.set({ selectable: false });
        img.scaleToWidth(canvas.width);
        img.scaleToHeight(canvas.height);
        
        const overlay = new fabric.Rect({
          left: 0,
          top: 0,
          fill: color,
          width: canvas.width,
          height: canvas.height,
          selectable: false,
          opacity: 0.5,
        });

        canvas.clear();
        canvas.add(img);
        canvas.add(overlay);
        canvas.renderAll();
      });
    }
  }, [view, color, canvas]);

  const handleViewToggle = () => {
    setView((prevView) => (prevView === 'front' ? 'back' : 'front'));
  };

  useEffect(() => {
    const handleKeyDown = (e) => {
      if (e.keyCode === 46) { 
        canvas.remove(canvas.getActiveObject());
      }
    };

    document.addEventListener("keydown", handleKeyDown);
    return () => document.removeEventListener("keydown", handleKeyDown);
  }, [canvas]);

  return (
    <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center' }}>
      <div 

        style={{ 
          width: '452px', 
          height: '548px', 
          position: 'relative', 
          backgroundColor: color,
          display: 'flex', 
          justifyContent: 'center', 
          alignItems: 'center',
          overflow: 'hidden'
        }}
      >
        <img 
         
          src={view === 'front' ? frontImage : backImage} 
          alt="T-Shirt Background" 
          style={{ 
            width: '100%', 
            height: '100%', 
            position: 'absolute', 
            top: 0, 
            left: 0, 
            zIndex: 1 
          }} 
        />

        <div style={{ position: 'absolute' }}>
          <div className="canvas-container">
            <canvas 
              ref={canvasRef} 
              width={452} 
              height={548} 
              style={{ 
                border: '1px solid black', 
                position: 'absolute', 
                top: 0, 
                left: 0 
              }} 
            ></canvas>
          </div>
        </div>
      </div>
      
      <div style={{ marginTop: '10px' }}>
        <button onClick={handleViewToggle}>
          Toggle View (Current: {view === 'front' ? 'Front' : 'Back'})
        </button>
      </div>
    </div>
  );
};

export default TShirtEditor;
