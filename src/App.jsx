import React, { useState } from 'react';
import TShirtEditor from './components/TShirtEditor';
import Editor from './components/Editor';
import { colors } from './components';

export default function App() {
  const [color, setColor] = useState('#FFFFFF'); 
  const [image, setImage] = useState('');
  const [text, setText] = useState(''); 
  const [isFrontView, setIsFrontView] = useState(true); 

  const handleColorChange = (newColor) => {
    setColor(newColor); 
  };

  const handleImageUpload = (imageData) => {
    setImage(imageData);
  };

  const handleTextChange = (e) => {
    console.log('Text input changed:', e.target.value);
    setText(e.target.value);
  };

  const toggleView = () => {
    setIsFrontView((prevView) => !prevView);
  };

  return (
    <div className="flex h-screen items-center justify-center">
      <div className="w-full max-w-[1600px] flex">
        <div className="flex-1">
          <TShirtEditor
            color={color} 
            handleColorChange={handleColorChange} 
            image={image} 
            text={text} 
            isFrontView={isFrontView} 
            toggleView={toggleView}
          />
        </div>
        <div className="w-1/2 p-4">
          <h2 className="text-lg font-bold mb-4">Editor</h2>
          <Editor
            color={color}
            handleColorChange={handleColorChange} 
            handleImageUpload={handleImageUpload} 
            text={text} 
            handleTextChange={handleTextChange} 
            colors={colors}
          />
        </div>
      </div>
    </div>
  );
}
