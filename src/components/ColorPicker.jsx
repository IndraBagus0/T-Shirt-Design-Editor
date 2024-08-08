import React from 'react';

const ColorPicker = ({ color, handleColorChange, colors }) => {
  return (
    <div className="mb-4">
      <label className="block mb-1">T-shirt Color:</label>
      <div className="flex flex-wrap gap-2">
        {colors.map(({ title, hex }) => (
          <button
            key={title}
            title={title}
            style={{ backgroundColor: hex }}
            className={`w-8 h-8 rounded-full border-2 border-white ${color === hex ? 'ring-2 ring-slate-400' : ''}`}
            onClick={() => handleColorChange(hex)}
          ></button>
        ))}
      </div>
    </div>
  );
};

export default ColorPicker;
