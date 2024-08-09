import React, { useRef, useState, useEffect } from "react";
import * as fabric from "fabric";
import frontImage from "../assets/img/crew_front.png";
import backImage from "../assets/img/crew_back.png";

const TShirtEditor = ({
  color,
  currentSide,
  frontTextObjects,
  backTextObjects,
  handleToggleSide,
}) => {
  const canvasRef = useRef(null);
  const [canvas, setCanvas] = useState(null);
  const [history, setHistory] = useState([]);
  const [redoStack, setRedoStack] = useState([]);
  const [isZoomedIn, setIsZoomedIn] = useState(false);
  const [backgroundImage, setBackgroundImage] = useState(null);

  useEffect(() => {
    const canvasInstance = new fabric.Canvas(canvasRef.current, {
      width: 200,
      height: 400,
      backgroundColor: "",
      selection: true,
    });
    setCanvas(canvasInstance);

    // Save initial state
    setHistory([canvasInstance.toJSON()]);

    return () => canvasInstance.dispose();
  }, []);

  useEffect(() => {
    if (canvas) {
      const imageUrl = currentSide === "front" ? frontImage : backImage;

      console.log("Loading image from URL:", imageUrl);

      fabric.Image.fromURL(imageUrl, (img) => {
        img.set({
          scaleX: canvas.width / img.width,
          scaleY: canvas.height / img.height,
        });
      
        setBackgroundImage(img); // Save reference to background image
        console.log("Background image set:", img); // Debugging line
      
        canvas.clear();
        canvas.add(img);
        canvas.renderAll();
      
        // Add text objects
        const textObjects =
          currentSide === "front" ? frontTextObjects : backTextObjects;
      
        textObjects.forEach((text) => {
          const textObj = new fabric.Textbox(text.text, {
            left: text.left,
            top: text.top,
            fontSize: text.fontSize,
            fill: text.fill,
            originX: "left",
            originY: "top",
          });
          canvas.add(textObj);
        });
      
        canvas.renderAll();
      
        // Save the state after rendering
        saveCanvasState();
      }, (err) => {
        console.error("Error loading image:", err);
      });
      
    }
  }, [currentSide, canvas, frontTextObjects, backTextObjects]);

  const saveCanvasState = () => {
    if (canvas) {
      setHistory((prevHistory) => [...prevHistory, canvas.toJSON()]);
      setRedoStack([]); // Clear redo stack on new action
    }
  };

  const handleUndo = () => {
    if (history.length > 1) {
      setRedoStack((prevRedoStack) => [history.pop(), ...prevRedoStack]);
      setHistory((prevHistory) => {
        const newHistory = prevHistory.slice(0, -1);
        canvas.loadFromJSON(newHistory[newHistory.length - 1], () => {
          canvas.renderAll();
        });
        return newHistory;
      });
    }
  };

  const handleRedo = () => {
    if (redoStack.length > 0) {
      const [latestRedo, ...newRedoStack] = redoStack;
      setHistory((prevHistory) => [...prevHistory, latestRedo]);
      setRedoStack(newRedoStack);
      canvas.loadFromJSON(latestRedo, () => {
        canvas.renderAll();
      });
    }
  };

  const toggleZoom = () => {
    if (canvas && backgroundImage) {
      const zoomFactor = isZoomedIn ? 1 / 1.5 : 1.5; // Zoom out or in
      console.log("Zooming with factor:", zoomFactor);
  
      // Check if backgroundImage is correctly set
      console.log("Background Image:", backgroundImage);
  
      // Apply zoom
      backgroundImage.scaleX *= zoomFactor;
      backgroundImage.scaleY *= zoomFactor;
  
      console.log("Updated ScaleX:", backgroundImage.scaleX);
      console.log("Updated ScaleY:", backgroundImage.scaleY);
  
      canvas.renderAll();
      setIsZoomedIn(!isZoomedIn);
    } else {
      console.error("Canvas or Background Image not available:", {
        canvas,
        backgroundImage,
      });
    }
  };
  

  return (
    <>
      <div className="relative flex justify-center items-center">
        <div
          className="h-tinggiGambar w-lebarGambar overflow-hidden flex justify-center items-center"
          style={{ backgroundColor: color }}
        >
          <img
            id="tshirt-backgroundpicture"
            src={currentSide === "front" ? frontImage : backImage}
            alt="T-Shirt Background"
            className="object-cover h-tinggiGambar w-lebarGambar absolute z-0"
          />
          <canvas ref={canvasRef} className="absolute z-20" />
        </div>
      </div>
      <div className="mt-4 flex justify-center space-x-4">
        <button
          onClick={handleUndo}
          className="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-700"
        >
          Undo
        </button>
        <button
          onClick={handleRedo}
          className="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-700"
        >
          Redo
        </button>
        <button
          onClick={toggleZoom}
          className="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-700"
        >
          {isZoomedIn ? "Zoom Out" : "Zoom In"}
        </button>
        <button
          onClick={handleToggleSide}
          className="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700"
        >
          Switch to {currentSide === "front" ? "Back" : "Front"}
        </button>
      </div>
    </>
  );
};

export default TShirtEditor;
