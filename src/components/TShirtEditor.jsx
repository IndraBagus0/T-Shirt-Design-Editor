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

  useEffect(() => {
    const canvasInstance = new fabric.Canvas(canvasRef.current, {
      width: 200, // Sesuaikan dengan ukuran gambar baju
      height: 400, // Sesuaikan dengan ukuran gambar baju
      backgroundColor: "",
      selection: true,
    });
    setCanvas(canvasInstance);

    return () => canvasInstance.dispose();
  }, []);

  useEffect(() => {
    if (canvas) {
      const imageUrl = currentSide === "front" ? frontImage : backImage;

      fabric.Image.fromURL(imageUrl, (img) => {
        img.set({
          scaleX: canvas.width / img.width,
          scaleY: canvas.height / img.height,
        });

        canvas.clear();
        canvas.add(img);

        // Tambahkan objek teks
        const textObjects =
          currentSide === "front" ? frontTextObjects : backTextObjects;
        textObjects.forEach((text) => {
          const textObj = new fabric.Textbox(text.text, {
            left: text.left || 100,
            top: text.top || 100,
            fontSize: text.fontSize || 20,
            fill: text.fill || "#000",
            originX: "left",
            originY: "top",
          });
          canvas.add(textObj);
        });

        canvas.renderAll();
      });
    }
  }, [currentSide, canvas, frontTextObjects, backTextObjects]);

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
      <div className="mt-4 flex justify-center">
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
